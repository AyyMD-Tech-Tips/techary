from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup
my_url = 'https://btvnovinite.bg/story/?story=360'


uClient = uReq(my_url)
page_html = uClient.read()
uClient.close()

page_soup = soup(page_html, "html.parser")

items = page_soup.findAll("li", {"class":"item"})


filename = "covid.csv"
f = open(filename, "w")
headers = "title, link\n"
f.write(headers)


for item in items:
	link = item.a["href"]
	text = item.findAll("div", {"class":"title"})
	title = text[0].text

	print("title: " + title)
	print("link: " + link)

	f.write(title.replace(",","|") + "," + link + "\n")
