#!/usr/bin/python

import RPi.GPIO as GPIO
import time
import requests

'''
INPUTS (GROOVE SENSORS)
'''
INPUT_GS_1 = 19
INPUT_GS_2 = 26
INPUT_GS_3 = 13
INPUT_GS_4 = 16
INPUT_GS_5 = 12
INPUT_GS_6 = 6
INPUT_GS_7 = 7
INPUT_GS_8 = 5
INPUT_GS_9 = 11
INPUT_GS_10 = 8

'''
OUTPUTS (LED, ANDON, BUZZER)
'''
OUTPUT_LED_1 = 9
OUTPUT_LED_2 = 25
OUTPUT_LED_3 = 10
OUTPUT_LED_4 = 24
OUTPUT_LED_5 = 22
OUTPUT_LED_6 = 23
OUTPUT_LED_7 = 27
OUTPUT_LED_8 = 18
OUTPUT_LED_9 = 15
OUTPUT_LED_10 = 14
OUTPUT_ANDON_LED_RED = 17
OUTPUT_ANDON_LED_ORANGE = 2
OUTPUT_ANDON_LED_GREEN = 20
OUTPUT_BUZZER = 4

'''
ATTRIBUTES
'''
BOUNCETIME = 200
inputCurrentStateArray = [GPIO.LOW for x in range(10)]
#inputChannelArray_1 = [0 for x in range(10)]
#outputChannelArray_1 = [0 for x in range(10)]
inputChannelArray_1 = [INPUT_GS_1, INPUT_GS_2, INPUT_GS_3, INPUT_GS_4, INPUT_GS_5, INPUT_GS_6, INPUT_GS_7, INPUT_GS_8, INPUT_GS_9, INPUT_GS_10]
outputChannelArray_1 = [OUTPUT_LED_1, OUTPUT_LED_2, OUTPUT_LED_3, OUTPUT_LED_4, OUTPUT_LED_5, OUTPUT_LED_6, OUTPUT_LED_7, OUTPUT_LED_8, OUTPUT_LED_9, OUTPUT_LED_10]
outputAndonLEDStateArray = [GPIO.LOW for x in range(3)]
outputAndonLEDArray = [OUTPUT_ANDON_LED_RED, OUTPUT_ANDON_LED_ORANGE, OUTPUT_ANDON_LED_GREEN]

API_HOST_1 = "192.168.8.102"
API_SCHEME_1 = "http"
API_PATH_1 = "qline_project/qline/public/quality-recored-input-defect-data/store"
API_QUERY_1 = "?key=value"
API_FRAGMENT_1 = "#"

MODEL_NAME = "quality-recored-input-defect-data"
COMPANY_ID = "company_id"
STRATEGIC_BUSINESS_UNIT_ID = "strategic_business_unit_id"
FACTORY_ID = "factory_id"
LINE_ID = "line_1"

'''
DEFINED FUNCTION
'''
#andon control (RED, ORANGE, GREEN)
def controlOutputAndonLED(redVal, orangeVal, greenVal):
	if (redVal == GPIO.HIGH):
		GPIO.output(outputAndonLEDArray[0], GPIO.HIGH)
		outputAndonLEDStateArray[0] = GPIO.HIGH
	else:
		GPIO.output(outputAndonLEDArray[0], GPIO.LOW)
		outputAndonLEDStateArray[0] = GPIO.LOW

	if (orangeVal == GPIO.HIGH):
		GPIO.output(outputAndonLEDArray[1], GPIO.HIGH)
		outputAndonLEDStateArray[1] = GPIO.HIGH
	else:
		GPIO.output(outputAndonLEDArray[1], GPIO.LOW)
		outputAndonLEDStateArray[1] = GPIO.LOW

	if (greenVal == GPIO.HIGH):
		GPIO.output(outputAndonLEDArray[2], GPIO.HIGH)
		outputAndonLEDStateArray[2] = GPIO.HIGH
	else:
		GPIO.output(outputAndonLEDArray[2], GPIO.LOW)
		outputAndonLEDStateArray[2] = GPIO.LOW

#buzzer control
def controlOutputBuzzer(buzzerVal):
	if (buzzerVal == GPIO.HIGH):
		GPIO.output(OUTPUT_BUZZER, GPIO.HIGH)
	else:
		GPIO.output(OUTPUT_BUZZER, GPIO.LOW)

#trigger output control business logic 1
def triggerOutputControlBusinessLogic_1():
	countResult = reduce(lambda count, i: count + (i == GPIO.HIGH), inputCurrentStateArray, 0)
	
	if (countResult <= 3):
		#print('(countResult <= 3)')
		controlOutputAndonLED(GPIO.LOW, GPIO.LOW, GPIO.HIGH)
		controlOutputBuzzer(GPIO.LOW)
	elif (countResult > 3) and (countResult <= 7):
		#print('(countResult > 3) and (countResult <= 7)')
		if (outputAndonLEDStateArray[0] == GPIO.HIGH):
			#print('(outputAndonLEDStateArray[0] == GPIO.HIGH)')
			controlOutputAndonLED(GPIO.HIGH, GPIO.LOW, GPIO.LOW)
		else:
			#print('(outputAndonLEDStateArray[0] != GPIO.HIGH)')
			controlOutputAndonLED(GPIO.LOW, GPIO.HIGH, GPIO.LOW)
		controlOutputBuzzer(GPIO.LOW)
	elif (countResult > 7) and (countResult <= 8):
		#print('(countResult > 7) and (countResult <= 8)')	
		controlOutputAndonLED(GPIO.HIGH, GPIO.LOW, GPIO.LOW)
		controlOutputBuzzer(GPIO.LOW)
	elif (countResult > 8):
		#print('(countResult > 8)')
		controlOutputAndonLED(GPIO.HIGH, GPIO.LOW, GPIO.LOW)
		controlOutputBuzzer(GPIO.HIGH)	
        
#http request send function
def triggerOutputControlBusinessLogic_2(reference_id):
    API_HOST_1 = "192.168.8.102"
    API_SCHEME_1 = "http"
    API_PATH_1 = "qline_project/qline/public/quality-recored-input-defect-data/store"
    API_QUERY_1 = "?key=value"
    API_FRAGMENT_1 = "#"

    MODEL_NAME = "quality-recored-input-defect-data"
    COMPANY_ID = "company_id"
    STRATEGIC_BUSINESS_UNIT_ID = "strategic_business_unit_id"
    FACTORY_ID = "factory_id"
    LINE_ID = "line_1"
    
    API_URL_1 = "{api_schema_1}://{api_host_1}/{api_path_1}"
    API_URL_1 = API_URL_1.format(api_schema_1=API_SCHEME_1, api_host_1=API_HOST_1, api_path_1=API_PATH_1)
    
    #url = 'https://www.w3schools.com/python/demopage.php'
    #myobj = {'somekey': 'somevalue'}
    #x = requests.post(url, data = myobj)
    #print(x.text)
    #print("{str1} {str2}".format(str1=str_dict['str1'], str2=str_dict['str2']))  # Hello World

#groove sensor callback function
def inputGSCallback(channel, reference_id):
	#GPIO.input(pin_number)
	#GPIO.output(pin_number, GPIO.LOW : GPIO.HIGH)
	#print(reference_id)
	inputChannelValue = GPIO.input( inputChannelArray_1[reference_id] )

	#inputCurrentStateArray[reference_id] = inputChannelValue
	
	if (inputChannelValue == GPIO.HIGH):
		GPIO.output(outputChannelArray_1[reference_id], GPIO.LOW)
		inputCurrentStateArray[reference_id] = GPIO.LOW
        #send http request
        triggerOutputControlBusinessLogic_2(reference_id)
	else:
		GPIO.output(outputChannelArray_1[reference_id], GPIO.HIGH)
		inputCurrentStateArray[reference_id] = GPIO.HIGH

	triggerOutputControlBusinessLogic_1()
#groove sensor callback trigger function
def triggerInputGSCallback():
	for i in range(0, 10):
		#print (i)
		#print (inputChannelArray_1[i])
		inputGSCallback(inputChannelArray_1[i], i)

#setup function
def _setup():
	#setup function
	#pass
	GPIO.setwarnings(False)
	GPIO.setmode(GPIO.BCM)
	
	#gpio input setup
	#GPIO.setup(INPUT_GS_1, GPIO.IN, pull_up_down=GPIO.PUD_DOWN)
	#polarity = RISING
	#GPIO.add_event_detect(INPUT_GS_1, GPIO.RISING, callback=my_callback_function, bouncetime=100)
	#polarity = FALLING
	#GPIO.add_event_detect(INPUT_GS_1, GPIO.FALLING, callback=my_callback_function, bouncetime=100)
	#polarity = BOTH
	#GPIO.add_event_detect(INPUT_GS_1, GPIO.BOTH, callback=my_callback_function, bouncetime=100)
	GPIO.setup(INPUT_GS_1, GPIO.IN)
	GPIO.setup(INPUT_GS_2, GPIO.IN)
	GPIO.setup(INPUT_GS_3, GPIO.IN)
	GPIO.setup(INPUT_GS_4, GPIO.IN)
	GPIO.setup(INPUT_GS_5, GPIO.IN)
	GPIO.setup(INPUT_GS_6, GPIO.IN)
	GPIO.setup(INPUT_GS_7, GPIO.IN)
	GPIO.setup(INPUT_GS_8, GPIO.IN)
	GPIO.setup(INPUT_GS_9, GPIO.IN)
	GPIO.setup(INPUT_GS_10, GPIO.IN)
	
	#gpio output setup
	GPIO.setup(OUTPUT_LED_1, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_2, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_3, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_4, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_5, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_6, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_7, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_8, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_9, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_LED_10, GPIO.OUT, initial=GPIO.LOW)

	GPIO.setup(OUTPUT_ANDON_LED_RED, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_ANDON_LED_ORANGE, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_ANDON_LED_GREEN, GPIO.OUT, initial=GPIO.LOW)
	GPIO.setup(OUTPUT_BUZZER, GPIO.OUT, initial=GPIO.LOW)

	#polarity = FALLING
	GPIO.add_event_detect(INPUT_GS_1, GPIO.BOTH, callback=lambda channel=INPUT_GS_1, reference_id=0:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_2, GPIO.BOTH, callback=lambda channel=INPUT_GS_2, reference_id=1:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_3, GPIO.BOTH, callback=lambda channel=INPUT_GS_3, reference_id=2:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_4, GPIO.BOTH, callback=lambda channel=INPUT_GS_4, reference_id=3:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_5, GPIO.BOTH, callback=lambda channel=INPUT_GS_5, reference_id=4:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_6, GPIO.BOTH, callback=lambda channel=INPUT_GS_6, reference_id=5:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_7, GPIO.BOTH, callback=lambda channel=INPUT_GS_7, reference_id=6:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_8, GPIO.BOTH, callback=lambda channel=INPUT_GS_8, reference_id=7:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_9, GPIO.BOTH, callback=lambda channel=INPUT_GS_9, reference_id=8:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)
	GPIO.add_event_detect(INPUT_GS_10, GPIO.BOTH, callback=lambda channel=INPUT_GS_10, reference_id=9:inputGSCallback(channel,reference_id), bouncetime=BOUNCETIME)

	triggerInputGSCallback()

#main function
def _main():
	#setup function
	#pass
	while True:
		#pass
		triggerOutputControlBusinessLogic_1()
		time.sleep(5)

'''
EXECUTE
'''

_setup()
_main()
