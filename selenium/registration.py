from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import xlrd
import mysql.connector
from mysql.connector import Error
import re

try:
	connection = mysql.connector.connect(host='localhost',
										  database='test_db',
										  user='root',
										  password='')

	try:
		max_nb_row = 0
		book = xlrd.open_workbook('plqr_val.xlsx')

		for sheet in book.sheets():
			max_nb_row = max(max_nb_row, sheet.nrows)

			for row in range(max_nb_row) :
				for sheet in book.sheets() :
					if row < sheet.nrows :

						if connection.is_connected():
							cursor = connection.cursor()

							value = sheet.row(row)	
							print(value)

							name = str(value[0])
							name = name.replace('\'', '')
							name = name.split(":")[1]
							name = list(name)
							print(type(name))

							email = str(value[1])
							email = email.replace('\'', '')
							email = email.split(":")[1]
							email = list(email)
							print(type(email))
							
							password = str(value[2])
							password = password.replace('\'', '')
							password = password.split(":")[1]
							password = list(password)
							print(type(password))
							
							repeated_password = str(value[3])
							repeated_password = repeated_password.replace('\'', '')
							repeated_password = repeated_password.split(":")[1]
							repeated_password = list(repeated_password)
							print(type(repeated_password))
							
							browser = webdriver.Firefox()

							browser.get('http://www.pl.abc')
							element = browser.find_element_by_id("register")
							element.click()

							inputElement = browser.find_element_by_id("name")
							inputElement.send_keys(name)

							inputElement = browser.find_element_by_id("email")
							inputElement.send_keys(email)

							inputElement = browser.find_element_by_id("pwd")
							inputElement.send_keys(password)

							inputElement = browser.find_element_by_id("password-confirm")
							inputElement.send_keys(repeated_password)

							inputElement.send_keys(Keys.ENTER)

							browser.implicitly_wait(10)

							#assert browser.page_source.find("Your account is waiting for our administrator approval")

							browser.quit()

							cursor.execute("SELECT * from users order by id DESC limit 1 ")  # select the table
							records = cursor.fetchall()
							#print(records)
							print(type(records))
							print(type(records))
							records = zip(*records)
							values = []
							for i in records:
								values.append(i)

							if (name != values[1]):
								print("Name not found")
							else:
								print("Name found")

							if (email != values[2]):
								print("Email not found")
							else:
								print("All good")

							if (password != values[3]):
								print("Password not found")
							else:
								print("Password found")

							if (repeated_password != values[3]):
								print("Password not matching")
							else:
								print("Password confirmation is ok")

							if (connection.is_connected()):
								cursor.close()
								connection.close()

	except Error as e:

		print ("Unable to finish", e)

except Error as e:

	print ("Unable to connect", e)