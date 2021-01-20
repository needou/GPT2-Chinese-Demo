import torch
import os
import pip

print(torch.__version__)
print(torch.cuda.is_available())


print(pip.pep425tags.get_supported())

#设置使用那块GPU “0”是GPU的id
# os.environ["CUDA_VISIBLE_DEVICES"] = "0"
#
# #查看GPU是否可用
# cuda_available=torch.cuda.is_available()
#
# print('cuda_available:',cuda_available)
#
# #查看可用GPU数量
# coun=torch.cuda.device_count()
# print(coun)
#
# #返回GPU名字 0 是返回GPU名字的ID
# name=torch.cuda.get_device_name(0)
# print(name)
# #返回当前设备的ID
# num=torch.cuda.current_device()
