# Convertize Technical Test

http://jqueryresume.com/convertize/

### Developed in TypeScript using Sublime.

### Clone the repository
cd to the folder you want to contain your new project and run 
```
git clone git@github.com:listingslab/Convertize.git
```

### TypeScript Compiler
The Typescript compiler wrapper. Exposes the [TypeScript command line compiler](https://www.npmjs.com/package/typescript-compiler) to your code.
```
npm install typescript-compiler
```
allows us to run commands like the following to compile and concatonate our JavaScript into the public folder
```
tsc -out public/js/tickergrid.js src/Main.ts
```
## Grunt & LiveReload workflow
We use Grunt to facilitate workflow. The Gruntfile.js is very simple, it's default task is to watch for changes in the /src directory and then compile the TypeScript code into a single file: /public/js/convertize.js. There are a few dependencies to install to enable this. cd to the project directory and run
```
npm install
```
Once these components are installed we can simply run the command ```grunt``` in our project directory. Any changes made to .ts files in the /src directory will immediately be compiled into the file /public/js/convertize.js.