# Step 1: Install PHPUnit

Install PHPUnit through Pear, MacPorts, or whatever system you use. It is available for many packaging systems. When done, you should be able to run "phpunit" from your command line and get a help response.

# Step 2: Clone this repository.

# Step 3: Add concrete5

1. Download a copy of the latest concrete5 development version from http://github.com/concrete5/concrete5/. 
2. Install concrete5 as you normally would. NOTE: Do not symlink to a production copy of concrete5!
3. Ensure that your concrete5-tests/ repository has a directory named web/, and within that directory is a valid concrete5 install.

# Step 4: Run tests using bootstrap.php. For example

    cd ~/git/concrete5-tests/tests
    phpunit --bootstrap bootstrap.php concrete/helpers/FormHelperTest.php
    
Expected output is something like

	PHPUnit 3.5.13 by Sebastian Bergmann.
	
	.............
	
	Time: 0 seconds, Memory: 15.25Mb
	
	OK (13 tests, 128 assertions)

# Write Tests!

Send us tests via pull request, or send @aembler a private message if you'd like direct commit access to this repository.