    #!/bin/bash
    #
    # Script to locate parallel ATAPI REV drives.
    #
      for DRIVE in `ls /proc/ide | egrep -e "^hd[a-z]"`;
      do
        if [ -f /proc/ide/$DRIVE/model ];
        then
          if grep -q "Iomega RRD" /proc/ide/$DRIVE/model;
          then
            echo "/dev/$DRIVE is an Iomega REV drive."
          fi
        fi
      done
