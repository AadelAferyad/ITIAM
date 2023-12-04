#!/usr/bin/python3
import mysql.connector

conn = mysql.connector.connect(
    host = "localhost",
    user = "haruma",
    password = "kjkszpj987",
    database= "Test1"
)
cursor = conn.cursor()
cursor.execute("SELECT * FROM sharshar")
result = cursor.fetchall()
print(result)
cursor.close()
conn.close()