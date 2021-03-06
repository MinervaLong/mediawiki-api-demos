#This file is auto-generated. See modules.json and autogenerator.py for details

#!/usr/bin/python3

"""
    get_contributors.py

    MediaWiki API Demos
    Demo of `Contributors` module: Get request to list all logged-in contributors and count of anonymous contributors to a page.

    MIT License
"""

import requests

S = requests.Session()

URL = "https://en.wikipedia.org/w/api.php"

PARAMS = {
    "action": "query",
    "titles": "MediaWiki",
    "prop": "contributors",
    "format": "json"
}

R = S.get(url=URL, params=PARAMS)
DATA = R.json()

print(DATA)
