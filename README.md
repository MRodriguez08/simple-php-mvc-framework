simple-php-mvc-framework
========================

If you are new in the php world and you want to start a brand new lightweight mvc application, Simple PHP MVC framework is a very good option.
This is a small object oriented framework that help you with the basic requirements of a webapp such as
- Security (considering user roles in a easy to understand configuration file) 
- Authentication (minimal user authentication based on encripted passwork with BLOWFISH algorithm and roles)
- Comunication interfaces (included web sockets server, rest services exposed throw controller actions and coming soap web services)

### Model-View-Controller
This framework is fully Object Oriented and it implemented respecting Model-View-Controller Architectural Pattern.
Summing up, client requests are processed by Controller, which capture the context parameters (GET or POST parameters) and call Model operation to solve the requested action.
Inside the model we find the Business Layer and Persistence Layer (Simple PHP MVC Framework is an hibrid between ModelViewControlelr and Stricts Layer Design Pattern to treat separetly Business Logic and Persistence logic). This Desing was taken considering the posibility of changing the persistence framework (now is Doctrine, in the future you may want to use another one), in that case you will only have to change specific implementation of your Persistence Layer)
### Authorization control

### Web Sockets
- [Ratchet WebSockets API](http://socketo.me/)

### Persistence
In the first place, SPMF include Doctrine as Object Relational Mapper, but considering the model layers separation, you could perfectly use another one (such as Propel for example). To do this, some implementation consideration has to be taken (simple-php-mvc-framework nowadays is tied up to Doctrine particular coding paradigm), so I suggest you to understand SPMF and do the appropiate changes, contact us if you need any help. 
- [Doctrine Object Relational Mapper API](http://www.doctrine-project.org/)

The Doctrine Project is the home to several PHP libraries primarily focused on database storage and object mapping. The core projects are a Object Relational Mapper (ORM) and the Database Abstraction Layer (DBAL) it is built upon.

### AddOns
- [JMS Serializer JSON API](http://jmsyst.com/bundles/JMSSerializerBundle)
- [Bootstrap 3.1.1](http://getbootstrap.com/)
- [JQuery v1.11](http://jquery.com/)
