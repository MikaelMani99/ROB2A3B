import MySQLdb
import RPi.GPIO as GPIO
from time import sleep
GPIO.setmode(GPIO.BOARD)
#Ports for the left motor
Motor1A = 22
Motor1B = 18
Motor1E = 16
#Ports for the right motor
Motor2A = 37
Motor2B = 35
Motor2E = 33
#Set up the motors
#the left motors
GPIO.setup(Motor1A,GPIO.OUT)
GPIO.setup(Motor1B,GPIO.OUT)
GPIO.setup(Motor1E,GPIO.OUT)
#the right motors
GPIO.setup(Motor2A,GPIO.OUT)
GPIO.setup(Motor2B,GPIO.OUT)
GPIO.setup(Motor2E,GPIO.OUT)

while True:
    #Connect to database
    db = MySQLdb.connect(host="localhost", user="root", passwd="admin", db="Gagnagrunnur")
    # you must create a Cursor object. It will let you execute all the queries you need
    cur = db.cursor()
    # Fetching data from the database
    cur.execute("SELECT action FROM direction ORDER BY id DESC LIMIT 1")
    # print all the first cell of all the rows
    data = cur.fetchall()
    print(data[0][0])
    if data[0][0] == "stop":
        GPIO.output(Motor1E, GPIO.LOW)
        GPIO.output(Motor2E, GPIO.LOW)

    elif data[0][0] == "forward":
        GPIO.output(Motor1A,GPIO.HIGH)
        GPIO.output(Motor1B,GPIO.LOW)
        GPIO.output(Motor1E,GPIO.HIGH)

        GPIO.output(Motor2A,GPIO.HIGH)
        GPIO.output(Motor2B,GPIO.LOW)
        GPIO.output(Motor2E,GPIO.HIGH)

    elif data[0][0] == "backward":
        GPIO.output(Motor1A,GPIO.HIGH)
        GPIO.output(Motor1B,GPIO.HIGH)
        GPIO.output(Motor1E,GPIO.LOW)

        GPIO.output(Motor2A,GPIO.HIGH)
        GPIO.output(Motor2B,GPIO.HIGH)
        GPIO.output(Motor2E,GPIO.LOW)

    elif data[0][0] == "left":
        GPIO.output(Motor1A,GPIO.HIGH)
        GPIO.output(Motor1B,GPIO.LOW)
        GPIO.output(Motor1E,GPIO.HIGH)

        GPIO.output(Motor2A,GPIO.HIGH)
        GPIO.output(Motor2B,GPIO.HIGH)
        GPIO.output(Motor2E,GPIO.LOW)

    elif data[0][0] == "right":
        GPIO.output(Motor2A,GPIO.HIGH)
        GPIO.output(Motor2B,GPIO.LOW)
        GPIO.output(Motor2E,GPIO.HIGH)

        GPIO.output(Motor1A,GPIO.HIGH)
        GPIO.output(Motor1B,GPIO.HIGH)
        GPIO.output(Motor1E,GPIO.LOW)

db.close()
