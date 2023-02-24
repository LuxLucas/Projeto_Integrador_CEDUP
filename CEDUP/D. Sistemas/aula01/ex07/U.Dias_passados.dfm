object Form1: TForm1
  Left = 0
  Top = 0
  Caption = 'Form1'
  ClientHeight = 156
  ClientWidth = 150
  Color = clBtnFace
  Font.Charset = ANSI_CHARSET
  Font.Color = clWindowText
  Font.Height = -15
  Font.Name = 'Times New Roman'
  Font.Style = [fsBold]
  OldCreateOrder = False
  PixelsPerInch = 96
  TextHeight = 17
  object lbmes: TLabel
    Left = 24
    Top = 64
    Width = 35
    Height = 17
    Caption = 'M'#234's:'
  end
  object lbdia: TLabel
    Left = 24
    Top = 27
    Width = 27
    Height = 17
    Caption = 'Dia:'
  end
  object txtdia: TEdit
    Left = 65
    Top = 24
    Width = 33
    Height = 25
    TabOrder = 0
  end
  object txtmes: TEdit
    Left = 65
    Top = 64
    Width = 49
    Height = 25
    TabOrder = 1
  end
  object btcalcular: TButton
    Left = 24
    Top = 112
    Width = 90
    Height = 25
    Caption = 'Calcular'
    TabOrder = 2
    OnClick = btcalcularClick
  end
end
