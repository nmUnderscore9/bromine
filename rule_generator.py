#Global Variables
FILE_PATH="rules.html"
AMOUNT_OF_RULES=0
PARAGRAPH_ELEMENT="p"
FONT_SIZE=20
COLOR="white"
COMPARATIVE_TO_AMOUNT_OF_RULES=1

OPEN_RULES_IN_READ_MODE = open(FILE_PATH , "r")
CONTENTS_FROM_OPEN_RULES_IN_READ_MODE = OPEN_RULES_IN_READ_MODE.read()
OPEN_RULES_IN_APPEND_MODE =  open(FILE_PATH, "a")
AMOUNT_OF_RULES = input("\033[35m[RULE AMOUNT] \033[39mEnter the amount of rules you would like:")
while(int(AMOUNT_OF_RULES) >= int(COMPARATIVE_TO_AMOUNT_OF_RULES)):
    current_rule = input(str(COMPARATIVE_TO_AMOUNT_OF_RULES) + ".") 
    OPEN_RULES_IN_APPEND_MODE.write("<" + PARAGRAPH_ELEMENT + ' style= "font-size:' + str(FONT_SIZE) + ';color:' + COLOR + ';"'  + ">" + str(COMPARATIVE_TO_AMOUNT_OF_RULES) + "." + str(current_rule) + "</" + PARAGRAPH_ELEMENT + ">\n")
    COMPARATIVE_TO_AMOUNT_OF_RULES += 1
    OPEN_RULES_IN_APPEND_MODE.close()
    OPEN_RULES_IN_READ_MODE.close()
