# First-Repository
package chap6.homowork;

import java.util.Scanner;

/**
 * 验证用户登录信息，登录验证次数最多3次，账号或密码错误时给出登录失败提示和剩余可用次数，超过3次程序退出（假如登录账号为：zhangsan
 * 密码：123456）
 * 
 * @author Administrator
 *
 */
public class T5 {

	public static void main(String[] args) {
		String name = "";
		String pwd = "";
		int chanceCount = 3;// 机会次数
		Scanner scan = new Scanner(System.in);

		do {
			System.out.print("请输入用户名：");
			name = scan.nextLine();
			System.out.print("请输入密码：");
			pwd = scan.nextLine();
			if (name.equals("zhangsan") && pwd.equals("123456")) {
				System.out.println("登录成功！");
				break;
			} else {
				// 登录失败
				chanceCount--;
				if (chanceCount == 0) {
					System.out.println("错误次数已达3次，程序退出！");
					// 1.正常终止当前运行的Java虚拟机：System.exit(0)
					// 2.异常终止当前运行的Java虚拟机：System.exit(非零的int型参数)
					// System.exit(0);
					// break;
					return;
				}
				System.out.println("账号或密码错误，请重新输入（你还有" + chanceCount + "次机会）");
			}
		} while (chanceCount > 0);

	}

}
