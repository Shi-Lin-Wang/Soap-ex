<?xml version ='1.0' encoding ='UTF-8' ?>
<definitions name='Users' 
  targetNamespace='http://demos.pixelmax.in/soapandwsdl/users.wsdl'
  xmlns:tns='http://demos.pixelmax.in/soapandwsdl/users.wsdl'
  xmlns:soap='http://schemas.xmlsoap.org/wsdl/soap/'
  xmlns='http://schemas.xmlsoap.org/wsdl/'>

<message name='getUsersRequest'>
  <part name='symbol' type='xsd:string'/>
</message>

<message name='getUsersResponse'>
  <part name='Result' type='xsd:string'/>
</message>

<portType name='UsersPortType'>
  <operation name='getUsers'>
    <input message='tns:getUsersRequest'/>
    <output message='tns:getUsersResponse'/>  
  </operation>
</portType>

<binding name='UsersBinding' type='tns:UsersPortType'>
  <soap:binding style='rpc' transport='http://schemas.xmlsoap.org/soap/http'/>
  <operation name='getUsers'>
    <soap:operation soapAction='urn:localhost'/>
    <input>
      <soap:body use='encoded' namespace='urn:localhost' encodingStyle='http://schemas.xmlsoap.org/soap/encoding/'/>
    </input>
    <output>
      <soap:body use='encoded' namespace='urn:localhost' encodingStyle='http://schemas.xmlsoap.org/soap/encoding/'/>
    </output>
  </operation>     
</binding>

<service name='UsersService'>
  <port name='UsersPort' binding='UsersBinding'>
    <soap:address location='http://demos.pixelmax.in/soapandwsdl/users.php'/>
  </port>
</service>
</definitions>