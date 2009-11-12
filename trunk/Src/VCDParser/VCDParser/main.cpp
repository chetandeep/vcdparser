#include "Tokenizer.h"
#include <iostream>
#include <fstream>
using namespace std;

int main()
{
	// test for scanner
// 	char* path = "test2.vcd";
// 	ofstream out("out.txt");
// 	ofstream out2("out2.txt");
// 	signed char ch;
// 	CScanner s( path );
// 
// 	while ( (ch = s.get_char()) != -1 )
// 		out << ch;
// 
// 	s.reopen( "test2.vcd");
// 	while ( (ch = s.get_char()) != -1 )
// 		out2 << ch;


	// test for tokenizer
	char* path = "test.vcd";
	ofstream out("out.txt");

	CTokenizer t(path);

	int tok;
	while ( (tok = t.next_var_token()) != TT_EOF )
		out << t.get_word() << "		" << tok << endl;

	return 0;
}