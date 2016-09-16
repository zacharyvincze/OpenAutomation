import RPi.GPIO as GPIO
import time
import sys

GPIO.setmode(GPIO.BOARD)

pinlist = [int(sys.argv[1])]

for i in pinlist:
	GPIO.setwarnings(False)
	GPIO.setup(i, GPIO.OUT)
	GPIO.output(i, GPIO.HIGH)

def trigger():
	for i in pinlist:
		print i
		GPIO.output(i, GPIO.HIGH)
		GPIO.cleanup()
		break
