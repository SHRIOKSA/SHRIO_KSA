import java.util.Arrays;
import java.util.Scanner;

public class Question1{
    public static void main(String[] args)
    {
        Scanner input = new Scanner(System.in);

        String list[][] = {{"Toyota","Naissan"},
                            {"Hyundai","Kia"},
                            {"Mazda","Honda"}};
        


        System.out.println(list[0][0]);
        System.out.println(list[1][1]);
        System.out.println(list[2][0]);


    }
}

class Question2{
    public static void main(String[] args)
    {
        Scanner input = new Scanner(System.in);

        int list[] = new int[3];

        for(int i=0;i<3;i++)
        {
            System.out.print("Enter element "+ i +": ");
            list[i] = input.nextInt();

            if(list[i] == 0)
            {
                System.out.println("Exit!");
                break;
            }
        }
        Arrays.sort(list);

        for(int i = 0;i<3;i++)
        {
            System.out.print(list[i]+" ");
        }
    }
}

class Question3{
    public static void main(String[] args)
    {
        Scanner input = new Scanner(System.in);

        int list[] = new int[3];

        for(int i=0;i<3;i++)
        {
            System.out.print("Enter element "+ i +": ");
            list[i] = input.nextInt();
        }
        Arrays.sort(list);

        for(int i = 0;i<3;i++)
        {
            System.out.print(list[i]+" ");
        }
    }
}

class Question4{
    public static void main(String[] args)
    {
        Scanner input = new Scanner(System.in);
        System.out.print("Enter array size: ");
        int size = input.nextInt();
        int list[] = new int[size];

        for(int i=0;i<3;i++)
        {
            System.out.print("Enter element "+ i +": ");
            list[i] = input.nextInt();

            if(list[i] == 0)
            {
                System.out.println("Exit!");
                break;
            }
        }
        Arrays.sort(list);

        for(int i = 0;i<3;i++)
        {
            System.out.print(list[i]+" ");
        }
    }
}


class Question5{
    public static void main(String[] args)
    {
        Scanner input = new Scanner(System.in);

        int list[] = new int[2];

        System.out.print("Enter number1: ");
        list[0] = input.nextInt();
        System.out.print("Enter number2: ");
        list[1] = input.nextInt();
        
        int sum = list[0] + list[1];

        System.out.println("Sum is: "+sum);
}