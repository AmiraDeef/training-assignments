function StudentShow(_name, age, grade) {
    this.name = _name;
    this.age = age;
    this.grade = grade;
   
    this.print = function (elementId) {
        document.getElementById(elementId).innerHTML += this.name + " : " + this.age + " : " + this.grade + "<br/>";
    }
}

var students = [
    { fname: 'ali', age: 22, grade: 100 },
    { fname: 'nora', age: 20, grade: 90 },
    { fname: 'nada', age: 25, grade: 75 },
    { fname: 'heba', age: 19, grade: 50 },
    { fname: 'bassem', age: 21, grade: 40 }
];

var studentShows = students.map(function(student) {
    return new StudentShow(student.fname, student.age, student.grade);
});

for (var i = 0; i < studentShows.length; i++) {
    studentShows[i].print('Students');
}

var result = studentShows.filter(function (student) {
    return student.grade > 80;
});

document.getElementById('p1').innerHTML += "Students have grade greater than 80";

result.forEach(function (student) {
    student.print('gt80');
});

// Sort the studentShows array by name
studentShows.sort(function (a, b) {
    if (a.name.toUpperCase() > b.name.toUpperCase()) {
        return 1;
    } else if (a.name.toUpperCase() < b.name.toUpperCase()) {
        return -1;
    } else {
        return 0;
    }
});

document.getElementById('p2').innerHTML += "Students sorted ascending by names";

// Print the sorted students
studentShows.forEach(function (student) {
    student.print('sorting');
});
