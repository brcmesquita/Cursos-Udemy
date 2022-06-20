package application;

import java.util.Date;

import entities.Order;
import entities_enums.OrderStatus;

public class App {
    public static void main(String[] args) throws Exception {
        
        Order order = new Order(1080, new Date(), OrderStatus.PENDING_PAYMENT);

        System.out.println(order);

        OrderStatus os1 = OrderStatus.DELIVERED;
        System.out.println(os1);

        OrderStatus os2 = OrderStatus.valueOf("DELIVERED");
        System.out.println(os2);

    }
}