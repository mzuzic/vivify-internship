
var Person = function(firstName, lastName, gender) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.gender = gender;
    
}

Person.staticProperty = "hmm";
Person.staticAlert = function() {
    alert("static alert");
}

var Student = function(firstName, lastName, gender, faculty) {
    Person.call(this, firstName, lastName, gender);
    this.faculty = faculty;
}

p = new Person("marko", "zuzic", "m");