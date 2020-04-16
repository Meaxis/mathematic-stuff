value = True
import os

while value == True:
	print("▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬")
	firstnumber = input("First number?\n> ")
	print("▬▬▬▬▬▬▬▬▬▬")
	secondnumber = input("Second number\n> ")
	print("▬▬▬▬▬▬▬▬▬▬")

	if firstnumber > secondnumber:
		print(firstnumber, "(first number) is greater than", secondnumber)

	elif firstnumber == secondnumber:
		print(firstnumber, "and", secondnumber, "are equal.")

	else:
		print(secondnumber, "(second number) is greater than", firstnumber)

	print("▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬")

	os.system("pause")
