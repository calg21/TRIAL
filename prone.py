import word_bag_GUI
import PyPDF2
import pandas
import webbrowser
import os
from nltk.tokenize import RegexpTokenizer
from nltk.corpus import stopwords
from nltk.stem import PorterStemmer
from nltk.stem.wordnet import WordNetLemmatizer
from nltk.tokenize import word_tokenize

#Method that a pdf that is read into the program goes through to eliminate any unwanted words or symbols#
def preprocess(text):
    #Filters out punctuation from paragraph witch becomes tokenized to words and punctuation#
    tokenizer = RegexpTokenizer(r'\w+')
    result = tokenizer.tokenize(text)

    #Makes all words lowercase#
    words = [item.lower() for item in result]

    #Removes all remaining tokens that are not alphabetic#
    result = [word for word in words if word.isalpha()]

    #Imports stopwords to be removed from paragraph#
    stop_words = set(stopwords.words("english"))

    #Removes the stop words from the paragraph#
    filtered_sent = []
    for w in result:
        if w not in stop_words:
            filtered_sent.append(w)

    #Return word to root word/chop-off derivational affixes#
    ps = PorterStemmer()
