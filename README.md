# Remove-Console-Log

PHP script to remove all javascript console.log instances from file structure

## Installation

It's just one file. I hope you didn't expect me to write 

## Usage

###Prerequisites
* Please have PHP installed

###Basic Useage
* In Terminal run `php remove_consolelog.php '/path/to/directory/or/file.js'`
* Let the script do its job

###Warning
This script so far is tested to remove the following types of console.logs:

* `console.log('Hello, World.');`
* `console.log('Hello, World.')`
* `console.log();`
* `console.log(variable);`

... among others.

So basically, don't run this on the root of a project where you may be removing console.log() entries where they should stick around (un-minified vendor scripts and such).

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

###Enjoy, carefully.