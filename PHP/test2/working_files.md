- Manipulating Files
>PHP offers a number of functions to use when creating, reading, uploading, and editing files.
The **fopen()** function creates or opens a file. If you use **fopen()** with a file that does not exist, the file will be created, given that the file has been opened for writing (w) or appending (a).
> Use one of the following **modes** to open the file.
>
>**r**: Opens file for read only.
>
>**w**: Opens file for write only. Erases the contents of the file or creates a new file if it doesn't exist.
>
>**a**: Opens file for write only.
>
>**x**: Creates new file for write only.
>
>**r+**: Opens file for read/write.
>
>**w+**: Opens file for read/write. Erases the contents of the file or creates a new file if it doesn't exist.
>
>**a+**: Opens file for read/write. Creates a new file if the file doesn't exist
>
>**x+**: Creates new file for read/write.
>
>The example below creates a new file, "file.txt", which will be created in the same directory that houses the PHP code.
>
>     $myfile = fopen("file.txt", "w");
>PHP offers a number of functions to use when creating, reading, uploading, and editing files.
--------------------------------------------------------
-Write to File
>
>When writing to a file, use the **fwrite()** function.
The first parameter of **fwrite()** is the file to write to; the second parameter is the string to be written.
>
>The example below writes a couple of names into a new file called "names.txt".
>
>     <?php
>     $myfile = fopen("names.txt", "w");
>
>     $txt = "John\n";
>     fwrite($myfile, $txt);
>     $txt = "David\n";
>     fwrite($myfile, $txt);
>
>     fclose($myfile);
>
>     /* File contains:
>     John
>     David
>     * /
>     ?>
>
>Notice that we wrote to the file "names.txt" twice, and then we used the fclose() function to close the file.
The \n symbol is used when writing new lines.

---------------------------------------------------------
- Appending to a File
>
>If you want to append content to a file, you need to open the file in append mode.
>
>For example:
>     $myFile = "test.txt";
>     $fh = fopen($myFile, 'a');
>     fwrite($fh, "Some text");
>     fclose($fh);
>
>When appending to a file using the 'a' mode, the file pointer is placed at the end of the file, ensuring that all new data is added at the end of the file.
>
>-Let's create an example of a form that adds filled-in data to a file.
>     <?php
>     if(isset($_ POST['text'])) {
>     $name = $_ POST['text'];
>     $handle = fopen('names.txt', 'a');
>     fwrite($handle, $name."\n");
>     fclose($handle);
>     }
>     ?>
>     <form method="post">
>     Name: <input type="text" name="text" />
>     <input type="submit" name="submit" />
>     </form>
Now, each time a name is entered and submitted, it's added to the "names.txt" file, along with a new line.
>
>The **isset()** function determined whether the form had been submitted, as well as whether the text contained a value.
We did not specify an action attribute for the form, so it will submit to itself.
---------------------------------------------------------
- Reading a File
>
>The file() function reads the entire file into an array. Each element within the array corresponds to a line in the file:
>     $read = file('names.txt');
>     foreach ($read as $line) {
>     echo $line .", ";
>     }
This prints all of the lines in the file, and separates them with commas.
We used the foreach loop, because the **$read** variable is an array.
>
>At the end of the output in the previous example, we would have a comma, as we print it after each element of the array.
>
>The following code lets us avoid printing that final comma.
>     $read = file('names.txt');
>     $count = count($read);
>     $i = 1;
>     foreach ($read as $line) {
>     echo $line;
>     if($i < $count) {
>     echo ', ';
>     }
>     $i++;
>     }
The **$count** variable uses the count function to obtain the number of elements in the $read array.
Then, in the foreach loop, after each line prints, we determine whether the current line is less than the total number of lines, and print a comma if it is.
This avoids printing that final comma, as for the last line, **$i** is equal to **$count**.
