from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup
my_url = 'https://btvnovinite.bg/'


uClient = uReq(my_url)
page_html = uClient.read()
uClient.close()

page_soup = soup(page_html, "html.parser")

items = page_soup.findAll("li",{"class":"item"})

filename = "items.csv"
f = open(filename, "w")
headers = "image, headline\n"
f.write(headers)

for item in items:
	link = item.a["href"]
	image = item.div.img["src"]
	title = item.findAll("div", {"class":"title"})

	headline = title[0].text

	print("headline: " + headline)
	print("image: " + image)
	print("link: " + link)

	f.write(headline.replace(",","|") + "," + image + "," + link + "\n")

f.close()