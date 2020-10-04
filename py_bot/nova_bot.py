from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup
my_url = 'https://nova.bg/news'


uClient = uReq(my_url)
page_html = uClient.read()
uClient.close()

page_soup = soup(page_html, "html.parser")

titles = page_soup.findAll("div",{"class":"thumb-title"})

filename = "items_nova.txt"
f = open(filename, "w")
headers = "headline, link\n"
f.write(headers)

for title in titles:
	link = title.a["href"]
	text = title.findAll("a", {"class":"title gtm-NewsTopNews-click"})
	headline = text[0].text

	print("headline: " + headline)
	print("link: " + link)

	f.write(headline.replace(",","|") + "," + link + "\n")

f.close()