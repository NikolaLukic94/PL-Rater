from selenium import webdriver
from selenium.webdriver.common.keys import Keys

browser = webdriver.Firefox()

browser.get('http://www.pl.abc')
element = browser.find_element_by_id("register")
element.click()

inputElement = browser.find_element_by_id("name")
inputElement.send_keys('Example Name')

inputElement = browser.find_element_by_id("email")
inputElement.send_keys('examplename@yahoo.com')

inputElement = browser.find_element_by_id("pwd")
inputElement.send_keys('testtesttestt')

inputElement = browser.find_element_by_id("password-confirm")
inputElement.send_keys('testtesttestt')

inputElement.send_keys(Keys.ENTER)

browser.implicitly_wait(10)

assert browser.page_source.find("Your account is waiting for our administrator approval")

browser.quit()
