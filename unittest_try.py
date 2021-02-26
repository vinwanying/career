import unittest
class TstStriods(unittest.TestCase):

    def test_upper(self):
        self.assertEqual('fo'.upper(), 'FOO')

    def test_isupper(self):
        self.assertTrue('FOO'.isupper())
        self.assertFalse('Foo'.isupper())

    def test___split(self):
        s = 'hello world'
        self.assertEqual(s.split(), ['hello', 'world'])
        # check that s.split fails when the separator is not a string
        with self.assertRaises(TypeError):
            s.split(2)


class TstStgrtgtrriods(unittest.TestCase):

    def test_upper(self):
        self.assertEqual('fo'.upper(), 'FOO')

    def test_isupper(self):
        self.assertTrue('FO'.isupper())
        self.assertFalse('Foo'.isupper())

if __name__ == '__main__':
    unittest.main()
    print('fwf')
