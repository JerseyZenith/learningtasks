public class Main {
    public static void main(String[] args) {
        Human aHuman = new Human();
        Human aStudent = new Student();
        Human aTeacher = new Teacher();

        aHuman.humanTalk();
        aStudent.humanTalk();
        aTeacher.humanTalk();
    }
}

class Human {
    public void humanTalk() {
        System.out.println("The teacher asks a question: What is polymorphism?");
    }
}

class Student extends Human {
    public void humanTalk() {
        System.out.println("The student says: Polymorphism, is defined as having many forms, happens when there are several classes that are connected to one another by inheritance.");
    }
}

class Teacher extends Human {
    public void humanTalk() {
        System.out.println("The teacher says: That's correct!");
    }
}
