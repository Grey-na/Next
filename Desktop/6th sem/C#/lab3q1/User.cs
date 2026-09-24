using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Linq;

namespace lab3q1
{
    class User
    {
        public string name;
        public int age;
        //Default Constructor
        public User()
        {
            Console.WriteLine("Default Constructor");
        }
        //Parameterized Constructor
        public User(string name, int age)
        {
            this.name = name;
            this.age = age;
        }
        //Copy Constructor
        public User(User obj)
        {
            name = obj.name;
            age = obj.age;
        }
        //Static Constructor
        static User()
        {
            Console.WriteLine("Static Constructor");
        }
        //Private Constructor
        private User()
        {
            Console.WriteLine("Private Constructor");
        }
    }
}
