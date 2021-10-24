class variables{
	
	int ins_variable=40;
	static float static_variable=10f;

	public static void main(String args[])
	{	variables obj=new variables();
		int local_variable=60;
		System.out.println("the local variable is "+ local_variable);
		System.out.println("the instance variable is "+ obj.ins_variable);
		System.out.println("the static variable is "+ static_variable);
	}
}