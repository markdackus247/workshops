# Functies om naar de nummers te vragen.
def get_numbers(number1=5, number2=6, number3=7):
    # number1 = int(input('Wat is het eerste cijfer: '))
    # number2 = int(input('Wat is het tweede cijfer: '))
    # number3 = int(input('Wat is het derde cijfer: '))
    return number1, number2, number3

# Functie om het gemiddelde te berekenen.
def calculate_average(number1, number2, number3):
    return (number1 + number2 + number3) / 3

# Functie om het het gemiddelde uit te rekenen.
def print_average(average):
     print(f'Het gemiddelde van deze drie cijfers is {average:.1f}')

number1, number2, number3  = get_numbers()
average = calculate_average(number1, number2, number3)
print_average(average)