#!/usr/bin/python
# -*- coding: iso-8859-1 -*-
import serial
comport = serial.Serial('COM4', 9600) 
print ("Serial Iniciada...\n")
 
import mysql.connector
cnx = mysql.connector.connect(user='root', password='', host='127.0.0.1', database='dados')
cursor = cnx.cursor()
add_sinais = ("INSERT INTO sinais (sin_temp,sin_umid,sin_cabo,sin_gas) VALUES (%s, %s, %s, %s)")
 
while (True):
  serialValue = comport.readline()
  data_sinais = serialValue.split("|")
  print (data_sinais)
  cursor.execute(add_sinais, data_sinais)
  cnx.commit()
 
cursor.close()
cnx.close()
comport.close()
