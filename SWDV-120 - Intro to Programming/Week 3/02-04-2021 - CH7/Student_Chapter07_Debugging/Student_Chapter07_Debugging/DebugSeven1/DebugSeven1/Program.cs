﻿// Uses DisplayWebAddress method three times
using System;
using static System.Console;
class DebugSeven1
{
    static void Main()
    {
        DisplayWebAddress();
        WriteLine("Shop at Shopper's World");
        DisplayWebAddress();
        WriteLine("The best bargains from around the world");
        DisplayWebAddress();
    }
    private static void DisplayWebAddress()
    {
        WriteLine("------------------------------");
        WriteLine("Visit us on the web at:");
        WriteLine("www.shoppersworldbargains.com");
        WriteLine("******************************");
    }
}
