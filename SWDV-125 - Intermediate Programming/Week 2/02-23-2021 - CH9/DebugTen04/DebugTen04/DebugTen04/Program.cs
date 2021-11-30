﻿// class HotelRoom has child classes SingleRoom which costs less,
// and Suite which costs more
using static System.Console;
class DebugTen04
{
    static void Main()
    {
        HotelRoom aRoom = new HotelRoom(234);
        SingleRoom aSingle = new SingleRoom(135);
        Suite aSuite = new Suite(453);

        WriteLine(aRoom.ToString());
        WriteLine(aSingle.ToString());
        WriteLine(aSuite.ToString());
    }
}
class HotelRoom
{
    public const double PREMIUM = 30.00;
    public const double STANDARD_RATE = 89.99;
    private int roomNumber;
    protected double rate;
    public HotelRoom(int room)
    {
        roomNumber = room;
        rate = STANDARD_RATE;
    }
    public int RoomNumber
    {
        get
        {
            return roomNumber;
        }
    }
    public double Rate
    {
        get
        {
            return rate;
        }
    }
    override public string ToString()
    {
        string temp = GetType() + " Room " + RoomNumber + " Rate: " +
          Rate.ToString("C");
        return temp;
    }
}//HotelRoom

class SingleRoom : HotelRoom
{
    public SingleRoom(int room) : base(room)
    {
        rate -= PREMIUM;
    }   
}//SingleRoom

class Suite : HotelRoom
{
    public Suite(int room) : base(room)
    {
        rate += PREMIUM;
    }
}//Suite

