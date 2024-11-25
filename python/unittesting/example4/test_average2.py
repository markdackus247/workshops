from unittest import TestCase, main
from unittest.mock import patch
from average2 import get_numbers, calculate_average, print_average


class TestAverage(TestCase):

    # Deze functie voert de getallen 5, 6 en 7 in.
    # Er zijn nog problemen met het mocken van de input functie binnen een functie.
    @patch('builtins.input', side_effect=['5', '6', '7'])
    def test_get_numbers(self, mock_input):
        number1, number2, number3 = get_numbers(5, 6, 7)  # Call the function
        self.assertEqual(number1, 5)
        self.assertEqual(number2, 6)
        self.assertEqual(number3, 7)

    # Deze functie test de calculate_average functie.
    # Let op! Dit is een assertAlmostEqual() functie.
    def test_calculate_average(self):
        self.assertAlmostEqual(calculate_average(5, 6, 7), 6.0, places=1)

    # De printfunctie wordt gemocked.
    @patch('builtins.print')
    def test_print_average(self, mock_print):
        print_average(6.0)
        mock_print.assert_called_with('Het gemiddelde van deze drie cijfers is 6.0')


if __name__ == '__main__':
    main()
