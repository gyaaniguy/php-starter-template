#Description
Starter PHP lib template. Includes:  
Codeception. PHPUNIT was removed, because annotation in comments are an abomination.
Functional composer Autoloading,  
  
For my future small scripts. 

#CodeCeption

- Initial Config  
`vendor/bin/codecept.bat bootstrap` 

- Generate Tests  
`vendor/bin/codecept generate:test unit First`   
        *  Gen test for class First   
        *  PHPSTORM Creates test in wrong dir. Move from 'test/Classes' to 'test/unit'
- Run all Unit tests.  
`vendor/bin/codecept.bat run unit` 


#Using 
Run Composer scripts:  
`composer test run unit` instead of the usual 
`vendor/bin/codecept.bat run unit`

### Update Composer / autoloading
- updates composer autoloader. Porbably needed after adding new classes  
`composer dump-autoload` 
