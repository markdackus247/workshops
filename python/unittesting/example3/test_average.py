import unittest
from unittest.mock import patch

class TestAverage(unittest.TestCase):

    @patch('builtins.input', side_effect=['5', '6', '7'])
    @patch('builtins.print')
    def test_average(self, mock_print, mock_input):
        # Execute the code to be tested
        number1 = float(input('Eerste cijfer: '))
        number2 = float(input('Tweede cijfer: '))
        number3 = float(input('Derde cijfer: '))

        average = (number1 + number2 + number3) / 3

        print(f'Het gemiddelde van de drie cijfers is {average:.1f}')

        # Check the values of the variables
        self.assertEqual(number1, 5.0)
        self.assertEqual(number2, 6.0)
        self.assertEqual(number3, 7.0)
        self.assertAlmostEqual(average, 6.0, places=1)

        # Check the print output
        mock_print.assert_called_with('Het gemiddelde van de drie cijfers is 6.0')

if __name__ == '__main__':
    unittest.main()
