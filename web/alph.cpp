#include <iostream>
using namespace std;

int main() {
	char c='A';
	for(int i = 0; i < 26; i++)
		cout<<"<div class=\"alpha\" id=\""<<c<<"\"><h2>"<<c++<<" WordList</h2></div>\n";
		//cout<<"<td><a href=\"./wordlist.html#"<<c++<<"\">"<<c<<"</a></td>\n";
	return 0;
}
