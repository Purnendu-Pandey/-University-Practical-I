"""
Create a dataset data.csv having two categorical column (the country column, and the 
purchased column). [15]
1. Apply OneHot coding on Country column. 
2. Apply Label encoding on purchased column
"""

"""
import pandas as pd
df=pd.read_csv("data.csv");
from sklearn.preprocessing import LabelEncoder
from sklearn.preprocessing import OneHotEncoder
print("\n Label Encoder : \n")
labelencoder=LabelEncoder()
df['Country'] = labelencoder.fit_transform(df['Country'])
print(df)
print("\n")
labelencoder=LabelEncoder()
df['Purchased'] = labelencoder.fit_transform(df['Purchased'])
print(df)

print("\n One Hot Encoding")
enc=OneHotEncoder(handle_unknown='ignore')
enc_df=pd.DataFrame(enc.fit_transform(df[['Purchased']]).toarray()) 
print(enc_df)

df=df.join(enc_df)
print(df)
"""