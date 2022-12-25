// Import mysql
const mysql = require("mysql");

// import env dan menjalankan method config 
require("dotenv").config();

// destructing object process.env 
const { DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE } = process.env;

/**
 * Membuat koneksi menggunakan method createConnection
 * Method menerima parameter object : host, user, password, database
 */
const db = mysql.createConnection({
    host : "localhost",
    user : "root",
    password: "", 
    database: "laravel_rest_api", 
});

/**
 * Menghubungan ke database menggunakan method connect
 * Menerima parameter 
 */

db.connect((err) => {
    if(err){
        console.log("Error Connection" + err.stack);
        return;
    }else{
        console.log("Connection to database");
        return;
    }
});

module.exports = db;