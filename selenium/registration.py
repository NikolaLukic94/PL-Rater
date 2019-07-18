from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import xlrd
import mysql.connector
from mysql.connector import Error

try:
	connection = mysql.connector.connect(host='localhost',
										  database='test_db',
										  user='root',
										  password='')

	if connection.is_connected():
		cursor = connection.cursor()

		try:
			max_nb_row = 0
			book = xlrd.open_workbook('plqr_val.xlsx')

			for sheet in book.sheets():
				max_nb_row = max(max_nb_row, sheet.nrows)

				for row in range(max_nb_row) :
					for sheet in book.sheets() :
						if row < sheet.nrows :
							name = sheet.row(row[0])
							email = sheet.row(row[1])
							password = sheet.row(row[2])
							repeated_password = sheet.row(row[3])

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

						#	  assert browser.page_source.find("Your account is waiting for our administrator approval")

							browser.quit()

							cursor.execute("SELECT * from users order desc limit 1")  # select the table
							records = cursor.fetchall()

							if (name != records[0]):
								print("We have a missmatch")
							else:
								print("All good")

							if (email != records[1]):
								print("We have a missmatch")
							else:
								print("All good")

							if (password != records[2]):
								print("We have a missmatch")
							else:
								print("All good")

							if (repeated_password != records[3]):
								print("We have a missmatch")
							else:
								print("All good")


							cursor.execute("SELECT * from users order desc limit 1")
							records = cursor.fetchall()

							if (connection.is_connected()):
								cursor.close()
								connection.close()

		except Error as e:

			print ("Unable to finish", e)

except Error as e:

	print ("Unable to connect", e)