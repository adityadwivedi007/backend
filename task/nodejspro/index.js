const http = require("http");
const fs  = require("fs");


const homeFile = fs.readFileSync("hime.html", "utf-8");

const server = http.createServer((req,res)=>{

})