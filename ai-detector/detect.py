import cv2
from ultralytics import YOLO
import firebase_admin
from firebase_admin import credentials, db
from seats_config import seats
import time

# 🔥 INIT FIREBASE
cred = credentials.Certificate("ai-detector/firebase-key.json")
firebase_admin.initialize_app(cred, {
    'databaseURL': 'https://smart-seating-management-default-rtdb.firebaseio.com'
})

ref = db.reference("seats")

# 🔥 LOAD MODEL YOLO
model = YOLO("yolov10n.pt")

# 🔥 VIDEO SOURCE (pakai webcam dulu)
cap = cv2.VideoCapture(0)

def is_inside(box, area):
    x1, y1, x2, y2 = box
    ax1, ay1, ax2, ay2 = area

    cx = (x1 + x2) // 2
    cy = (y1 + y2) // 2

    return ax1 < cx < ax2 and ay1 < cy < ay2

while True:
    ret, frame = cap.read()
    if not ret:
        break

    results = model(frame)

    detected_people = []

    for r in results:
        for box in r.boxes:
            cls = int(box.cls[0])

            if cls == 0:  # person
                x1, y1, x2, y2 = map(int, box.xyxy[0])
                detected_people.append((x1, y1, x2, y2))

                cv2.rectangle(frame, (x1,y1), (x2,y2), (0,255,0), 2)

    # 🔥 STATUS KURSI
    seat_status = {}

    for seat, area in seats.items():
        seat_status[seat] = "available"

    for box in detected_people:
        for seat, area in seats.items():
            if is_inside(box, area):
                seat_status[seat] = "occupied"

    # 🔥 KIRIM KE FIREBASE
    data = {}
    for seat, status in seat_status.items():
        data[seat] = {"status": status}

    ref.set(data)

    # 🔥 DISPLAY
    for seat, (x1,y1,x2,y2) in seats.items():
        cv2.rectangle(frame, (x1,y1), (x2,y2), (255,0,0), 2)
        cv2.putText(frame, seat, (x1,y1-10),
                    cv2.FONT_HERSHEY_SIMPLEX, 0.6, (255,0,0), 2)

    cv2.imshow("AI Seating", frame)

    if cv2.waitKey(1) == 27:
        break

    last_update = 0
    if time.time() - last_update > 5:
        ref.set(data)
        last_update = time.time()

cap.release()
cv2.destroyAllWindows()