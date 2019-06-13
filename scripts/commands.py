# coding=utf-8
import RPi.GPIO as GPIO
import sys

#Parametros recebidos via argumento
params = sys.argv[1:]
#Comodo selecionado
convenient = params[0]
#Aparelho eletronico selecionado
param = params[1]
#Estado do aparelho - ligado ou desligado
state = params[2]

#Parametrização para os aparelhos eletronicos da sala de estar
if (convenient == 'living_room'):
    if(param == 'light'):
        pin = 18
    elif(param == 'fan'):
        pin = 23
    else:
        pin = 24        
#Parametrização para os aparelhos eletronicos da cozinha
elif (convenient == 'kitchen'):
    if(param == 'light'):
        pin = 25
    elif(param == 'fan'):
        pin = 12
    else:
        pin = 16 
#Parametrização para os aparelhos eletronicos do banheiro
elif (convenient == 'bathroom'):
    if(param == 'light'):
        pin = 20
    else:
        pin = 21 
#Parametrização para os aparelhos eletronicos do quarto
elif (convenient == 'bedroom'):
    if(param == 'light'):
        pin = 17
    elif(param == 'fan'):
        pin = 27
    else:
        pin = 22 
#Parametrização para os aparelhos eletronicos da garagem
elif (convenient == 'garage'):
    if(param == 'light'):
        pin = 5
    else:
        pin = 6
#Parametrização para os aparelhos eletronicos da lavanderia
elif (convenient == 'laundry'):
    if(param == 'light'):
        pin = 13
    else:
        pin = 19
else:
    pin = None
    print ("Este comodo nao esta configurado")

#Liga o aparelho na GPIO selecionada
if(state == 'on'):
    GPIO.setmode(GPIO.BCM)
    GPIO.setwarnings(False)
    GPIO.setup(pin,GPIO.OUT)
    GPIO.output(pin,GPIO.LOW)
#desliga o aparelho na GPIO selecionada
else:
    GPIO.setmode(GPIO.BCM)
    GPIO.setwarnings(False)
    GPIO.setup(pin,GPIO.OUT)
    GPIO.output(pin,GPIO.HIGH)
    

