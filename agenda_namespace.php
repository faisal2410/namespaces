<?php
/*

Title: Understanding Namespaces in PHP Object-Oriented Programming

Agenda
What Are Namespaces - Concept and Purpose
Declaring Namespaces - Using the namespace Keyword
Using Namespaces - Fully Qualified Names and use Keyword
Nested Namespaces - Organizing Code with Nested Namespaces



What Are Namespaces:

Namespaces in PHP allow us to organize code into virtual "folders," grouping classes, interfaces, and functions into specific contexts. This is especially useful in PHP OOP, where large projects may have classes with similar names, such as User for users in multiple modules. By placing each User class in a different namespace, we prevent conflicts and maintain a clear organization.

Example Scenario
Imagine you’re building a web application with two sections, Admin and Frontend. Both may have User classes but with different purposes. Without namespaces, having two User classes would lead to conflicts.

Declaring Namespaces:

Namespaces are declared at the beginning of a PHP file using the namespace keyword. This declares the scope of the file and helps PHP locate your classes based on the defined structure.


Using Namespaces
Explanation
To use a class in a specific namespace, you have two options:

Fully Qualified Name: Access the class directly with the full namespace.
use Statement: Import the class with use to avoid typing the full path every time.

*/ 