package chap8;

import java.util.Scanner;

/*
 * 使用方法模拟简单的四则运算功能
 * 即改写chap2的Demo8
 */
public class Demo5_Calc {

	public static void main(String[] args) {
		// 创建Scanner类的对象
		Scanner scan = new Scanner(System.in);
		System.out.print("请输入第一个整数：");
		int num1 = scan.nextInt();
		scan.nextLine();// 吸收掉缓冲区中的换行符（回车键）
		System.out.print("请输入运算符（+,-,*,/）：");
		String operation = scan.nextLine();

		System.out.print("请输入第二个整数：");
		int num2 = scan.nextInt();
		// 调用无返回值的方法
		// calc(num1, num2, operation);
		// 调用有返回值的方法
		int res = calc2(num1, num2, operation);
		System.out.println(num1 + operation + num2 + "=" + res);
	}

	/**
	 * 定义一个无返回值方法，模拟简单的四则运算功能
	 * 
	 * @param num1
	 *            第一个操作数
	 * @param num2
	 *            第二个操作数
	 * @param operation
	 *            运算符
	 */
	public static void calc(int num1, int num2, String operation) {
		int result = 0;// 保存运算的结果
		// 使用多重if语句来判断用户输入的运算符是四种运算符的哪一种
		if (operation.equals("+") == true) {
			result = num1 + num2;
		} else if (operation.equals("-")) {
			result = num1 - num2;
		} else if (operation.equals("*")) {
			result = num1 * num2;
		} else if (operation.equals("/")) {
			result = num1 / num2;
		} else {
			System.out.println("您输入的运算符无效！");
			return;// 退出程序
		}
		System.out.println(num1 + operation + num2 + "=" + result);
	}

	// 定义一个有返回值的带参方法
	public static int calc2(int num1, int num2, String operation) {
		int result = 0;// 保存运算的结果
		// 使用多重if语句来判断用户输入的运算符是四种运算符的哪一种
		switch (operation) {
		case "+":
			result = num1 + num2;
			break;
		case "-":
			result = num1 - num2;
			break;
		case "*":
			result = num1 * num2;
			break;
		case "/":
			result = num1 / num2;
			break;
		default:
			System.out.println("您输入的运算符无效！");
			break;
		}
		return result;
	}
}
