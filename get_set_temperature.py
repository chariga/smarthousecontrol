import requests
import re
import codecs

r = requests.get('http://api-m2x.att.com/v2/devices/716c9baf210d74b565099d167999b875/streams/Set_Temperature?pretty -H X-M2X-KEY:88dfa223d430beea460aa8915f8852be')
r.json()
response = r.text
print repr(response)
