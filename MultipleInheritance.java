interface A {
    void showA();  // method to be implemented
}

interface B {
    void showB();  // method to be implemented
}

interface C extends A, B {
    // You can also add more methods if needed
}

class MultipleInheritance implements C {

    public void showA() {
        System.out.println("Multiple inheritance achieved using interfaces");
    }

    public void showB() {
        System.out.println("Implementing interface B");
    }

    public static void main(String[] args) {
        MultipleInheritance obj = new MultipleInheritance();
        obj.showA();
        obj.showB();
    }
}
