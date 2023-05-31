#include<iostream>
#include<fstream>
using namespace std;
int main(){
    string ch;
    fstream  f1;
    f1.open("file.txt",ios::in);
    f1.seekg(5,ios::beg);
    while(f1){
        getline(f1,ch);
        cout<<ch;
    }
    f1.close();
   
    cout<<"Program is done"<<endl;
}
