/*
Q.1 Write the simulation program for demand paging and show the page scheduling and total number of page
faults according the LFU page replacement algorithm. Assume the memory of n frames.
Reference String : 3, 4, 5, 6, 3, 4, 7, 3, 4, 5, 6, 7, 2, 4, 6 [15]
*/
#include <stdio.h>
typedef struct
{
    int val;
    int freq;
    int time;
} page;
page frame[20];
int LFU(int f)
{
	int minf=frame[0].freq,pos=0,cnt=0;
	for(int i=1; i<f; i++)
	{
		if(minf>frame[i].freq)
		{
			minf=frame[i].freq;
			pos=i;
		}
	}
	int temp[20],s=0;
	for(int i=0; i<f; i++)
	{
		if(frame[i].freq==minf)
		{
			cnt++;
			temp[s]=i;
			s++;
		}
	}
	if(cnt==1)
	{
		return pos;
	}
	else if(cnt>1)
	{
		int mint=99;
		for(int i=0; i<s; i++)
		{
			int j=temp[i];
			if(mint>frame[j].time)
			{
				mint=frame[j].time;
				pos=j;
			}
		}
	}
	return pos;
}
int main()
{
    int n, f, rs[100], fault = 0, pos = 0,hit=0,rear=0;

    printf("Enter Size of Reference String: ");
    scanf("%d", &n);
    printf("Enter Reference String: ");
    for (int i = 0; i < n; i++)
    {
        scanf("%d", &rs[i]);
    }

    printf("Enter Frame Size: ");
    scanf("%d", &f);
    for (int i = 0; i < f; i++)
    {
        frame[i].val = -1;
        frame[i].freq = 0;
        frame[i].time = 0;
    }

    for (int i = 0; i < n; i++)
    {
    int flag1=0;
    for(int j=0; j<f; j++)
    {
    	if(frame[j].val==rs[i])
    	{
    		flag1=1;
    		frame[j].freq++;
    		hit++;
    		break;
    	}
    }
    if(flag1==0)
    {
     pos=LFU(f);
     frame[pos].val=rs[i];
     frame[pos].freq=1;
     frame[pos].time=i+1;
     fault++;	
    }
        printf("\n");
        for (int j = 0; j < f; j++)
        {
            printf("%d\t", frame[j].val);
        }
    }
    printf("\nNo of Page Faults: %d\nNo of Page Hits: %d\n", fault, hit);

    return 0;
}


/*
Q.2 Write a C program to implement the shell. It should display the command prompt “myshell$”. Tokenize
the command line and execute the given command by creating the child process. Additionally it should
interpret the following ‘list’ commands as 
myshell$ list f dirname :- To print names of all the files in current directory.
myshell$ list n dirname :- To print the number of all entries in the current directory
*/
#include<sys/types.h>
#include<sys/stat.h>
#include<fcntl.h>
#include<stdio.h>
#include<stdlib.h>
#include<string.h>
#include<dirent.h>
#include<unistd.h>
void make_toks(char *s, char *tok[])
{
     int i=0;
     char *p;

     p=strtok(s," ");
     while(p!=NULL)
     {
       tok[i++]=p;
       p=strtok(NULL," ");
     }
      tok[i]=NULL;
}
void list(char *dn, char op)
{
     DIR *dp;
     struct dirent *entry;
     int dc=0,fc=0;

    dp=opendir(".");
    if(dp==NULL)
    {
      printf("Dir %s not found.\n",dn);
      return;
    }
    switch(op)
    {
         case 'f':
                 while(entry=readdir(dp))
                 {
                    if(entry->d_type==DT_REG)
                    printf("%s\n",entry->d_name);
                 }
                 break;
        case 'n':
                while(entry=readdir(dp))
                {
                   if(entry->d_type==DT_DIR) 
                   dc++;
                   if(entry->d_type==DT_REG) 
                   fc++;
                }
                printf("%d Dir(s)\t%d File(s)\n",dc,fc);
                break;
       case 'i':
               while(entry=readdir(dp))
               {
                  if(entry->d_type==DT_REG)
                  printf("%s\t%d\n",entry->d_name,entry->d_fileno);
               }
    }
    closedir(dp);
}
int main()
{
       char buff[80],*args[10];
       int pid;
       while(1)
       {
          printf("myshell$");
  	  		fflush(stdin);
   	  		fgets(buff,80,stdin);
  	  		buff[strlen(buff)-1]='\0';
          make_toks(buff,args);
          
          if(strcmp(args[0],"list")==0)
             list(args[2],args[1][0]);
          else
          {
            pid = fork();
            if(pid>0)
              wait();
            else
             {
                if(execvp(args[0],args)==-1)
                printf("Bad command.\n");
             }
          }
       }
       return 0; 
}
