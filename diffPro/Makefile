CXXFLAGS = -g -pg -finline-functions -Wall -Winline -pipe 


LIBPATH=               ./libs/

INCLUDEDIR=             -I$(LIBPATH)ullib/include/ -I$(LIBPATH)rapidjson/include/

LIBDIR=                 -L$(LIBPATH)ullib/lib -lullib 



CC  = gcc
CPP = g++
CXX = gcc
EXECUTABLE = diffPro

all     :  $(EXECUTABLE)
	rm -f *.o

clean   :
	rm -f *.o $(EXECUTABLE)

$(EXECUTABLE)	: diffPro.o args.o conf.o util.o process.o
	$(CPP) -o $@ $^ $(LIBDIR) $(INCLUDEDIR) -lm -lpthread -lcurl

%.o     : %.cpp
	$(CPP) $(CXXFLAGS) -c $< -o $@ $(INCLUDEDIR) 

