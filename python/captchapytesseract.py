#Challenge root me, le script ne réussis pas à 100%, Pytesseract à un peu de mal a bien lire les captcha
#Il faut écrire le captcha en moins de 3 seconde.
from os import path
from selenium import webdriver
from selenium.webdriver.common.by import By
from base64 import b64decode
from PIL import Image
from io import BytesIO
from re import sub
import pytesseract
def run():
    url = "http://challenge01.root-me.org/programmation/chXX/"
    driver = webdriver.Firefox(executable_path="driver/geckodriver")
    driver.get(url)

    images = driver.find_elements_by_tag_name('img')
    img = ''
    for image in images:
        img = image.get_attribute('src')
    imgs = img.replace('data:image/png;base64,', '')
    im = Image.open(BytesIO(b64decode(imgs)))
    im.save('image.png', 'PNG')
    keys = pytesseract.image_to_string(Image.open('image.png'))
    key = sub(r"[^a-zA-Z0-9]","",keys)
    print(key)

    driver.find_element(By.XPATH, "//html/body/form//input").send_keys(key)  
    btn = driver.find_element(By.XPATH, "//input[@value='Try']") 
    btn.click()
run()
